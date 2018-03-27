<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_320d8d29376d45f4f4711a9169a253d2a82cda0cfdc590f47a567631adb61b51 extends Twig_Template
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
        $__internal_3e25794fbe3f117a44f6078bbbc4acb4ba1d186361807640456fe9d997a4733b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e25794fbe3f117a44f6078bbbc4acb4ba1d186361807640456fe9d997a4733b->enter($__internal_3e25794fbe3f117a44f6078bbbc4acb4ba1d186361807640456fe9d997a4733b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c017bdb074c5f4283e6da186bb50a0c0d254e35064818a2c2813cbbaa3e8dd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c017bdb074c5f4283e6da186bb50a0c0d254e35064818a2c2813cbbaa3e8dd7b->enter($__internal_c017bdb074c5f4283e6da186bb50a0c0d254e35064818a2c2813cbbaa3e8dd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3e25794fbe3f117a44f6078bbbc4acb4ba1d186361807640456fe9d997a4733b->leave($__internal_3e25794fbe3f117a44f6078bbbc4acb4ba1d186361807640456fe9d997a4733b_prof);

        
        $__internal_c017bdb074c5f4283e6da186bb50a0c0d254e35064818a2c2813cbbaa3e8dd7b->leave($__internal_c017bdb074c5f4283e6da186bb50a0c0d254e35064818a2c2813cbbaa3e8dd7b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
