<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d495a8ece47ebcb9e14839fe5618731723cc5b41be2ed30354b65fac62cc474b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_cd31b5c3b6a2e8509cdcc33bb112b3c3eab82309306b33c0b098c515b8cf181b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd31b5c3b6a2e8509cdcc33bb112b3c3eab82309306b33c0b098c515b8cf181b->enter($__internal_cd31b5c3b6a2e8509cdcc33bb112b3c3eab82309306b33c0b098c515b8cf181b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5b00ddd46572136a85bd8c202d851197c6c7b7709da59996f6ad11693bb90510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b00ddd46572136a85bd8c202d851197c6c7b7709da59996f6ad11693bb90510->enter($__internal_5b00ddd46572136a85bd8c202d851197c6c7b7709da59996f6ad11693bb90510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd31b5c3b6a2e8509cdcc33bb112b3c3eab82309306b33c0b098c515b8cf181b->leave($__internal_cd31b5c3b6a2e8509cdcc33bb112b3c3eab82309306b33c0b098c515b8cf181b_prof);

        
        $__internal_5b00ddd46572136a85bd8c202d851197c6c7b7709da59996f6ad11693bb90510->leave($__internal_5b00ddd46572136a85bd8c202d851197c6c7b7709da59996f6ad11693bb90510_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d75b3da8142c556f7593f5fd051629a74b2a737edde56513079cf1cfbfdca0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d75b3da8142c556f7593f5fd051629a74b2a737edde56513079cf1cfbfdca0d8->enter($__internal_d75b3da8142c556f7593f5fd051629a74b2a737edde56513079cf1cfbfdca0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eabf51b68899254ffd11134530a8c33808a0898f424cb20dc57c044256361874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eabf51b68899254ffd11134530a8c33808a0898f424cb20dc57c044256361874->enter($__internal_eabf51b68899254ffd11134530a8c33808a0898f424cb20dc57c044256361874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_eabf51b68899254ffd11134530a8c33808a0898f424cb20dc57c044256361874->leave($__internal_eabf51b68899254ffd11134530a8c33808a0898f424cb20dc57c044256361874_prof);

        
        $__internal_d75b3da8142c556f7593f5fd051629a74b2a737edde56513079cf1cfbfdca0d8->leave($__internal_d75b3da8142c556f7593f5fd051629a74b2a737edde56513079cf1cfbfdca0d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
