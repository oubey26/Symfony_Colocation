<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4855f42526931bc48129acb74406fe693588a27042433aa6c2a7975e9a539281 extends Twig_Template
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
        $__internal_27f80141ff6c40c3ef6685547b87708a5324b1176105ebfb2f1437d87b7f6c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f80141ff6c40c3ef6685547b87708a5324b1176105ebfb2f1437d87b7f6c1c->enter($__internal_27f80141ff6c40c3ef6685547b87708a5324b1176105ebfb2f1437d87b7f6c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_13488ef77b48714a766fa0117ea79e31001f1b6a2eea025ff9895877317c32ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13488ef77b48714a766fa0117ea79e31001f1b6a2eea025ff9895877317c32ef->enter($__internal_13488ef77b48714a766fa0117ea79e31001f1b6a2eea025ff9895877317c32ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_27f80141ff6c40c3ef6685547b87708a5324b1176105ebfb2f1437d87b7f6c1c->leave($__internal_27f80141ff6c40c3ef6685547b87708a5324b1176105ebfb2f1437d87b7f6c1c_prof);

        
        $__internal_13488ef77b48714a766fa0117ea79e31001f1b6a2eea025ff9895877317c32ef->leave($__internal_13488ef77b48714a766fa0117ea79e31001f1b6a2eea025ff9895877317c32ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
