<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_eb930da2ce3ba16cf5cb1cd7e4d1ac3cce8a0612350b2ef5990c7548265e8c91 extends Twig_Template
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
        $__internal_90f21800f861f22854826ee86a4d9967e93ca9a35c798dadb79c4370aa1ac3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f21800f861f22854826ee86a4d9967e93ca9a35c798dadb79c4370aa1ac3ae->enter($__internal_90f21800f861f22854826ee86a4d9967e93ca9a35c798dadb79c4370aa1ac3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_579b30c22a4e61df95ff69e5e5214d853a54d8e1fafbb082cac4b496d690655f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579b30c22a4e61df95ff69e5e5214d853a54d8e1fafbb082cac4b496d690655f->enter($__internal_579b30c22a4e61df95ff69e5e5214d853a54d8e1fafbb082cac4b496d690655f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_90f21800f861f22854826ee86a4d9967e93ca9a35c798dadb79c4370aa1ac3ae->leave($__internal_90f21800f861f22854826ee86a4d9967e93ca9a35c798dadb79c4370aa1ac3ae_prof);

        
        $__internal_579b30c22a4e61df95ff69e5e5214d853a54d8e1fafbb082cac4b496d690655f->leave($__internal_579b30c22a4e61df95ff69e5e5214d853a54d8e1fafbb082cac4b496d690655f_prof);

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
