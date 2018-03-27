<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_31ece99f759ede4e199d1aabe5f894c3d807cb79ef9ed221ac69ca63b5de63fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_e2611b8a778cde36d2697aa2a95c0a4e7a0a441fc5127467a91c8bc915b3785a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2611b8a778cde36d2697aa2a95c0a4e7a0a441fc5127467a91c8bc915b3785a->enter($__internal_e2611b8a778cde36d2697aa2a95c0a4e7a0a441fc5127467a91c8bc915b3785a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_2daf37140c5549e7df10a76be6359f7168d770250c7d23301eac3c1d458a2f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2daf37140c5549e7df10a76be6359f7168d770250c7d23301eac3c1d458a2f6f->enter($__internal_2daf37140c5549e7df10a76be6359f7168d770250c7d23301eac3c1d458a2f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2611b8a778cde36d2697aa2a95c0a4e7a0a441fc5127467a91c8bc915b3785a->leave($__internal_e2611b8a778cde36d2697aa2a95c0a4e7a0a441fc5127467a91c8bc915b3785a_prof);

        
        $__internal_2daf37140c5549e7df10a76be6359f7168d770250c7d23301eac3c1d458a2f6f->leave($__internal_2daf37140c5549e7df10a76be6359f7168d770250c7d23301eac3c1d458a2f6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6369a37a83c18c8819cc979d7eed7e47a9808f9c7bc720ebc9b0a807905664c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6369a37a83c18c8819cc979d7eed7e47a9808f9c7bc720ebc9b0a807905664c2->enter($__internal_6369a37a83c18c8819cc979d7eed7e47a9808f9c7bc720ebc9b0a807905664c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ed6bdeeb47d69edc5f931471e3d9729b99ca783b50f6469f49525f5985b7527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed6bdeeb47d69edc5f931471e3d9729b99ca783b50f6469f49525f5985b7527->enter($__internal_0ed6bdeeb47d69edc5f931471e3d9729b99ca783b50f6469f49525f5985b7527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0ed6bdeeb47d69edc5f931471e3d9729b99ca783b50f6469f49525f5985b7527->leave($__internal_0ed6bdeeb47d69edc5f931471e3d9729b99ca783b50f6469f49525f5985b7527_prof);

        
        $__internal_6369a37a83c18c8819cc979d7eed7e47a9808f9c7bc720ebc9b0a807905664c2->leave($__internal_6369a37a83c18c8819cc979d7eed7e47a9808f9c7bc720ebc9b0a807905664c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
