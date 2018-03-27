<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_612c8048eb07d837a0565fcc81fe1a25b8803e14c9fb74612f45cde172933177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1080771a0ecd849be2207b90beddcc99dcf82a44c40f2dfe5e5369bbead052bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1080771a0ecd849be2207b90beddcc99dcf82a44c40f2dfe5e5369bbead052bd->enter($__internal_1080771a0ecd849be2207b90beddcc99dcf82a44c40f2dfe5e5369bbead052bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_042c4a50c0a6a3841369cb20c0f6658bcb7aaa63cb4bb11fb21c116975623e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042c4a50c0a6a3841369cb20c0f6658bcb7aaa63cb4bb11fb21c116975623e72->enter($__internal_042c4a50c0a6a3841369cb20c0f6658bcb7aaa63cb4bb11fb21c116975623e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1080771a0ecd849be2207b90beddcc99dcf82a44c40f2dfe5e5369bbead052bd->leave($__internal_1080771a0ecd849be2207b90beddcc99dcf82a44c40f2dfe5e5369bbead052bd_prof);

        
        $__internal_042c4a50c0a6a3841369cb20c0f6658bcb7aaa63cb4bb11fb21c116975623e72->leave($__internal_042c4a50c0a6a3841369cb20c0f6658bcb7aaa63cb4bb11fb21c116975623e72_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38502ac2b8e76d08b5a20c916dfa38a8f77ccb631cc83f50e392b771bfcdac65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38502ac2b8e76d08b5a20c916dfa38a8f77ccb631cc83f50e392b771bfcdac65->enter($__internal_38502ac2b8e76d08b5a20c916dfa38a8f77ccb631cc83f50e392b771bfcdac65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c915d01cb670094ee010906e8ccbf024bc286b321a3432faa341176d96e626d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c915d01cb670094ee010906e8ccbf024bc286b321a3432faa341176d96e626d7->enter($__internal_c915d01cb670094ee010906e8ccbf024bc286b321a3432faa341176d96e626d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c915d01cb670094ee010906e8ccbf024bc286b321a3432faa341176d96e626d7->leave($__internal_c915d01cb670094ee010906e8ccbf024bc286b321a3432faa341176d96e626d7_prof);

        
        $__internal_38502ac2b8e76d08b5a20c916dfa38a8f77ccb631cc83f50e392b771bfcdac65->leave($__internal_38502ac2b8e76d08b5a20c916dfa38a8f77ccb631cc83f50e392b771bfcdac65_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
