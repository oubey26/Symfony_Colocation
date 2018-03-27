<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bb495a9215d5cd3e7afa31edce7091e0c995219c50434f9cb6fe847e69d6ba6f extends Twig_Template
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
        $__internal_e1b8319e42e23bb2557394110900669ac15281c2acee5a4569207ca3664df363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b8319e42e23bb2557394110900669ac15281c2acee5a4569207ca3664df363->enter($__internal_e1b8319e42e23bb2557394110900669ac15281c2acee5a4569207ca3664df363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_8ba450bbd6a848cf9167ed408ef108b0b5379dbf9185f4028b76246a0b274753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba450bbd6a848cf9167ed408ef108b0b5379dbf9185f4028b76246a0b274753->enter($__internal_8ba450bbd6a848cf9167ed408ef108b0b5379dbf9185f4028b76246a0b274753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e1b8319e42e23bb2557394110900669ac15281c2acee5a4569207ca3664df363->leave($__internal_e1b8319e42e23bb2557394110900669ac15281c2acee5a4569207ca3664df363_prof);

        
        $__internal_8ba450bbd6a848cf9167ed408ef108b0b5379dbf9185f4028b76246a0b274753->leave($__internal_8ba450bbd6a848cf9167ed408ef108b0b5379dbf9185f4028b76246a0b274753_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
