<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_49b70f3ce50f99c0b90ab6474fd624b2ec63eeca703482c9fdfbe9187136617a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6b8861e4b88122042f8d41d22100582f860a26be9d28e80b1a44f0807580796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b8861e4b88122042f8d41d22100582f860a26be9d28e80b1a44f0807580796->enter($__internal_b6b8861e4b88122042f8d41d22100582f860a26be9d28e80b1a44f0807580796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_5a90facdc2e73e4c589941d261e9acb0e7f80df02f6b5263a1baf4747880912c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a90facdc2e73e4c589941d261e9acb0e7f80df02f6b5263a1baf4747880912c->enter($__internal_5a90facdc2e73e4c589941d261e9acb0e7f80df02f6b5263a1baf4747880912c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b6b8861e4b88122042f8d41d22100582f860a26be9d28e80b1a44f0807580796->leave($__internal_b6b8861e4b88122042f8d41d22100582f860a26be9d28e80b1a44f0807580796_prof);

        
        $__internal_5a90facdc2e73e4c589941d261e9acb0e7f80df02f6b5263a1baf4747880912c->leave($__internal_5a90facdc2e73e4c589941d261e9acb0e7f80df02f6b5263a1baf4747880912c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
